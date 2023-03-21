-- Stored procedure

SHOW PROCEDURE STATUS; -- 프로시져 확인

DELIMITER $$ -- : 세미콜론 만나도 쿼리 실행 되지 않음
		CREATE PROCEDURE 프로시저명(
			IN 변수명 데이터타입
			, OUT 변수명 데이터타입
		) 
		BEGIN
			프로시저의 실행 내용 정의
		END $$
		DELIMITER ; -- 세미콜론 앞에 띄어주기
		
		
DELIMITER $$
		CREATE PROCEDURE test_proc(
			IN in_num INT
		) 
		BEGIN
			SELECT *
			FROM employees
			LIMIT in_num;
		END $$
		DELIMITER ;
		
CALL test_proc(2);

DROP PROCEDURE test_proc; -- 프로시져 날리기




-- Stored function

DELIMITER $$
		CREATE FUNCTION fc_sum(num INT)
			RETURNS INT
		BEGIN
			RETURN num + num + num;
		END $$
		DELIMITER ;
		
SELECT fc_sum(2);

DROP FUNCTION fc_sum; -- 함수 날리기




-- Cursor

DELIMITER $$
	CREATE PROCEDURE test()
	BEGIN
	DECLARE sal INT;
	DECLARE sum_sal INT;
	DECLARE cur_sal INT;
	DECLARE end_row BOOLEAN DEFAULT FALSE;
	
	-- 커서 선언
	DECLARE cur_sal CURSOR FOR
		SELECT salary FROM salaries WHERE emp_no = 10001;
	
	-- 행이 끝이면 end_row에 true 대입
	DECLARE CONTINUE HANDLER FOR NOT FOUND
		SET end_row = TRUE;
	
	-- 커서 오픈
	OPEN cur_sal;
	
	-- 루프 시작
	cursor_loop: LOOP
		-- 
		FETCH cur_sal INTO sal;

		-- 행이 끝이면 루프 종료
		IF end_row THEN
			LEAVE cursor_loop;
		END IF;
		
		SET sum_sal = sum_sal + sal;
	END LOOP cursor_loop;
	
	SELECT sum_sal;
	END $$
	DELIMITER;


-- Trigger

DELIMITER $$
	CREATE TRIGGER 트리거명
	{BEFORE | AFTER} {INSERT | UPDATE| DELETE } -- 실행시기와 작업 선택
	ON 테이블 -- 트리거를 부착할 테이블
	FOR EACH ROW -- 아래 나올 조건에 해당하는 모든 row에 적용

	BEGIN
	-- 트리거시 실행되는 코드
	IF NEW.컬럼 != OLD.컬럼 THEN -- update 트리거는 old와 new 값이 존재한다.(별칭)
		UPDATE 테이블
		SET 컬럼 = NEW.컬럼
		WHERE 컬럼 = OLD.컬럼;
	END IF;
	END $$
	DELIMITER ;



DELIMITER $$
	CREATE TRIGGER test_update
	AFTER UPDATE
	ON departments
	FOR EACH ROW
	BEGIN
		UPDATE departments
		SET dept_name = 'trigger test'
		WHERE dept_no = 'd010';
	END $$
	DELIMITER ;
	
UPDATE departments
SET dept_name = 'update test'
WHERE dept_no = 'd009';



-- Full text : 검색어는 띄어쓰기 기준! (Like 주로 써서 텍스트 검색함)

CREATE TABLE test_text(
	text_no INT PRIMARY KEY AUTO_INCREMENT
	, f_text VARCHAR(4000)
);

CREATE FULLTEXT INDEX idx_test_text ON test_text(f_text);

INSERT INTO test_text(f_text) VALUES('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세');
INSERT INTO test_text(f_text) VALUES('무궁화 삼천리 화려강산 대한사람 대한으로 길이 보전하세');
INSERT INTO test_text(f_text) VALUES('남산 위에 저 소나무, 철갑을 두른 듯 바람서리 불변함은 우리 기상일세');
INSERT INTO test_text(f_text) VALUES('가을 하늘 공활한데 높고 구름 없이밝은 달은 우리 가슴 일편단심일세');
INSERT INTO test_text(f_text) VALUES('이 기상과 이 맘으로 충성을 다하여 괴로우나 즐거우나 나라 사랑하세');


-- 검색어1 또는 검색어2 (or 검색)
	SELECT * FROM test_text
	WHERE MATCH(f_text) AGAINST('동해물과 백두산이');
	
	-- 검색어 중간에 공백이 들어가는 경우
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('"검색어 검색어"');
	
	-- 검색어1을 검색한 결과에서 검색어2가 들어간것을 제외 할 때
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('"검색어1" -검색어2' in boolean mode);
	
	-- 검색어1, 검색어2 함께 검색이 되는 경우 (and 검색) 
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('+"검색어1" +"검색어2"' in boolean mode);
	
	-- 검색어1과 검색어2 And 검색과 함께 검색어2의 결과도 함께 출력
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('"검색어1" +"검색어2"' in boolean mode);
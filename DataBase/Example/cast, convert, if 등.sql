-- 1. 데이터 형식 변환 함수
-- CAST
-- CONVERT 

SELECT CAST(1234 AS CHAR(4));
SELECT CONVERT( 1234, CHAR(4) );

-- SELECT if( 수식, 참일 경우 결과, 거짓일 경우 결과)
 
SELECT emp_no, IF( emp_no = 10001, first_name, birth_date )
FROM employees;

SELECT IFNULL(' ', 'aa'); -- ifnull : 특정값 null 인지 아닌지 알고 싶을 때 사용

SELECT NULLIF(1, 1); -- 잘 사용 안함

SELECT 
	emp_no
	,gender
	,CASE gender
		WHEN 'M' THEN '남자'
		WHEN 'F' THEN '여자'
		ELSE ' '
	END
FROM employees LIMIT 10;

-- 위와 같은 값, m 아니면 f 둘 중 하나이기 때문
SELECT 
	emp_no
	,gender
	,CASE gender
		WHEN 'M' THEN '남자'
		ELSE '여자'
	END
FROM employees LIMIT 10;

-- 직책이 'senior engineer'일 경우는 '관리자'
-- 그 외의 직책은 '팀원'으로 사번, 분기 결과 출력

SELECT 
	emp_no 
	,CASE title
	 	WHEN 'Senior Engineer' THEN '관리자'
	 	ELSE '팀원'
	END AS 'k_title' -- 별칭으로 컬럼명 바꾸기
FROM titles;
	

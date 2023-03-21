-- auto increment
-- primary key만 적용됨!!
-- 값 삭제해도 올라가는 값은 그대로 계속 올라감
-- (1, 2 --> 2번 지우고 똑같은 값 넣어줘도 번호는 3번이 됨)
-- truncate로 싹다 날리고 값 넣으면 ==> 다시 1부터 시작함

CREATE TABLE test_member (
	mem_no INT(11) PRIMARY KEY 
	, mem_name VARCHAR(50)
);

ALTER TABLE test_member MODIFY mem_no INT(11) AUTO_INCREMENT; -- auto increment 추가

ALTER TABLE test_member AUTO_INCREMENT=10; -- auto increment 초기화
														-- 쿼리 추가하고, 다음 추가한 값 부터는 10부터 번호 들어감(값 섞일 위험 있음!!)

INSERT INTO test_member(mem_name)
VALUES('김주영');
INSERT INTO test_member(mem_name)
VALUES('박상준');
DELETE FROM test_member WHERE mem_no = 3;



SELECT *
FROM test_member;
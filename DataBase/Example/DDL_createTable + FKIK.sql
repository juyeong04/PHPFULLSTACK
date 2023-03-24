CREATE TABLE TEST_TBL (
	MEM_NO INT(5) 
	, MEM_NAME VARCHAR(50) NOT NULL -- 회사 시스템이 감당할수 있을 만큼 최대 길이 정해줌(영어는 1BYTE, 한글 3BYTE)
	, MEM_AGE INT(3) NOT NULL
	, MEM_GENDER ENUM('F','M') -- CHAR(1)도 가능
	, MEM_SIGNIN_DATE DATETIME NOT NULL
	, MEM_SIGNOUT_DATE DATETIME
	, CONSTRAINT PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)
);

--

CREATE TABLE TEST_TBL (
	MEM_NO INT(5) 
	, MEM_NAME VARCHAR(50) NOT NULL
	, MEM_AGE INT(3) NOT NULL
	, MEM_GENDER ENUM('F','M')
	, MEM_SIGNIN_DATE DATETIME NOT NULL
	, MEM_SIGNOUT_DATE DATETIME
	, CONSTRAINT PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)
);

====================

<< ALTER 로 FK, IK 추가, 삭제 >>
	ALTER TABLE 테이블 명 ADD CONSTRAINT 제약조건 명 PRIMARY KEY ( 컬럼명 ); -- PK 추가
	ALTER TABLE 테이블 명 ADD CONSTRAINT 제약조건 명 FOREIGN KEY ( 컬럼명 ); -- FK 추가
	
	ALTER TABLE 테이블 명 DROP CONSTRAINT 제약조건 명; -- 삭제


<< 테이블 >>
	1. 테이블 추가
	CREATE TABLE 테이블 명 ( 테이블 컬럼명 );

	2. 테이블 삭제
	DROP TABLE 테이블 명; rollback 불가능!!!!!!!!!!


<< 테이블 컬럼명 >>
	1. 컬럼명 추가
	ALTER TABLE test_tbl ADD COLUMN ADDR1 VARCHAR(300);
	
	2. 컬럼명 확인
	SHOW FULL COLUMNS FROM test_tbl;
	
	3. 컬럼명 변경
	-- 데이터 타입 길이 큰거--> 작은거 불가!!!!
	ALTER TABLE test_tbl ALTER COLUMN ADDR1 VARCHAR(200) 
	
	4. 컬럼명 삭제
	ALTER TABLE test_tbl DROP COLUMN ADDR1; 


DELETE FROM test_tbl; -- 테이블 데이터 삭제 rollback 가능

TRUNCATE TABLE test_tbl; -- 테이블 데이터 삭제 rollback 불가능!!!!!!!!!

--

INSERT INTO test_tbl (
	MEM_NO
	,MEM_NAME
	,MEM_AGE
	,MEM_GENDER
	,MEM_SIGNIN_DATE
	,MEM_SIGNOUT_DATE
)
VALUES (
	3
	, '김주영'
	, 27
	, 'F'
	, NOW()
	, NULL
);



SELECT *
FROM test_tbl;

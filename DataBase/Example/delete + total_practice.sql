-- Delete 신중하게 사용하기!!!!!!!!!!
-- delete, commit, rollback 사용한 뒤에 지워주기!!!!!!
-- DELETE FROM departments;
-- 
-- SELECT *
-- FROM departments;

-- DELETE FROM employees
-- WHERE emp_no = 500000;
-- 
-- SELECT *
-- FROM employees
-- WHERE emp_no = 500000;
-- 
-- 1. 사원 정보 테이블에 각자의 정보를 적절하게 넣으세요
-- 2. 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣으세요
-- 3. 짝궁의 [1,2]번의 것도 넣으세요
-- 4. 나와 짝궁의 소속 부서를 d009로 변경해 주세요

INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500000
	,DATE(970412)
	,'JuYeong'
	,'Kim'
	,'F'
	,DATE(20230314)
);

INSERT INTO salaries(
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES
(
	500000
	,60000
	,DATE(20230314)
	,DATE(99990101)
);


INSERT INTO titles(
	emp_no
	,title
	,from_date
	,to_date
)
VALUES
(
	500000
	,'Engineer'
	,DATE(20230314)
	,DATE(99990101)      
);

INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES(
	500000
	,'d004'
	,DATE(20230314)
	,DATE(99990101)
);

-- 짝궁 정보 추가
INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500001
	,DATE(19980501)
	,'MinGyu'
	,'Kim'
	,'M'
	,NOW()
);

INSERT INTO salaries(
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES
(
	500001
	,60000
	,NOW()
	,DATE(99990101)
);

INSERT INTO titles(
	emp_no
	,title
	,from_date
	,to_date
)
VALUES
(
	500001
	,'Engineer'
	,NOW()
	,DATE(99990101)      
);


INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES(
	500001
	,'d004'
	,DATE(20230314)
	,DATE(99990101)
);

-- 나, 짝궁 d009에 소속 부서 변경 

INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES(
	500000
	,'d009'
	,NOW()
	,DATE(99990101)
);

INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES(
	500001
	,'d009'
	,NOW()
	,DATE(99990101)
);

UPDATE dept_emp
SET to_date = NOW()
WHERE from_date = DATE(20230314);

-- 짝궁 정보 삭제

DELETE FROM employees
WHERE emp_no = 500001;

DELETE FROM salaries
WHERE emp_no = 500001;

DELETE FROM dept_emp
WHERE emp_no = 500001;

DELETE FROM titles
WHERE emp_no = 500001;


-- d009 관리자 나로 바꾸기(==> insert해서 전에 있는 정보 남기고 변경하기ㅠ!!) 
-- 전 사람 to_date를 오늘 날짜로 update 하고 --> 내 기록 insert 하기

UPDATE dept_manager
SET emp_no = 500000
WHERE emp_no = 111877;

UPDATE dept_manager
SET from_date = NOW()
WHERE emp_no = 500000;

UPDATE dept_manager
SET to_date = DATE(99990101)
WHERE emp_no = 500000;

-- 오늘 날짜로 직책 senior engineer로 변경

INSERT INTO titles(
	emp_no
	,title
	,from_date
	,to_date
)
VALUES(
	500000
	,'Senior Engineer'
	,NOW()
	,DATE(99990101)
);

UPDATE titles
SET to_date = NOW()
WHERE from_date = DATE(20230314);

-- 최고 연봉 사원, 최저연봉 사원 사번, 이름 출력

-- SELECT emp_no, first_name
-- FROM employees
-- WHERE emp_no IN (
-- 						SELECT emp_no
-- 						FROM salaries
-- 						WHERE salary IN (
-- 												(SELECT MAX(salary) FROM salaries),
-- 												(SELECT MIN(salary) FROM salaries)
-- 											)
-- 					);

SELECT emp_no, first_name
FROM employees
WHERE emp_no = (SELECT emp_no FROM salaries ORDER BY salary LIMIT 1)
	OR 
	emp_no = (SELECT emp_no FROM salaries ORDER BY salary DESC LIMIT 1);
	-- 중복되는 값 있을 때는 limit 때문에 제대로 된 데이터 가져올 수 없음


-- 전체 사원 평균 연봉 출력

SELECT AVG(salary)
FROM salaries;

-- 사번이 499,975 사원의 지금까지 평균연봉 출력

SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;



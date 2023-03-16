-- << Join >>
-- ON : 똑같은 데이터 유형 종류 연결 가능(e.g. INT = INT)

-- 1. Inner join : 교집합 속성연결

SELECT emp.emp_no, demp.dept_no, emp.first_name
FROM employees emp
	INNER JOIN dept_emp demp
		ON emp.emp_no = demp.emp_no
LIMIT 10;
-- 별칭 주기!!
-- 할수록 느려짐

-- 2. Outer join : 한쪽 기준 속성 연결
-- 					leftouter 주로 사용

INSERT INTO departments
VALUES(
			'd010'
			,'test'
);

SELECT *
FROM departments;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
	RIGHT JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;
		
-- 3. Self join

-- 4. Union : 두 개 쿼리 결과값을 하나로 합쳐서 보여줌

SELECT * FROM employees WHERE emp_no = 10001
UNION
SELECT * FROM employees WHERE emp_no = 10005;
-- : 중복된 데이터 삭제하고, 합쳐줌 (속도 느려짐)

SELECT * FROM employees WHERE emp_no = 10001 OR emp_no = 10005
UNION ALL
SELECT * FROM employees WHERE emp_no = 10005;
-- : 단순 합쳐주기

-- SELECT emp_no
-- FROM salaries
-- WHERE salary >= 60000
-- 	AND salary <= 70000;

-- SELECT *
-- FROM employees
-- WHERE emp_no BETWEEN 10003 AND 10005;
-- 실행속도 위에 거 보다 더 느림 ==> 잘 안씀

-- SELECT *
-- FROM employees
-- WHERE emp_no = 10001
-- 	OR emp_no = 10005;
	
-- SELECT *
-- FROM employees
-- WHERE emp_no IN(10001, 10005);
-- 실행속도 위에 거 보다 더 느림 ==> 잘 안씀

-- Mary
-- SELECT *
-- FROM employees
-- WHERE first_name LIKE('m___');
-- like 생각보다 리소스 많이 먹음

-- 지급명에 Engineer가 포함된 사원의 사번, 직급을 조회 
-- SELECT emp_no, title
-- FROM titles
-- WHERE title LIKE('%Engineer%');

-- 중복되는 값 제거
-- SELECT DISTINCT emp_no
-- FROM dept_emp;

-- limit : 제한된 개수의 값 가져옴
-- OFFSET : 시작하는 값 
-- 페이지 구성할 때 씀 (e.g. 10페이지부터 시작)
-- SELECT *
-- FROM employees
-- LIMIT 10 OFFSET 4;

-- 정렬
-- ASC : 오름차순(기본값)
-- DESC : 내림차순
-- SELECT *
-- FROM employees
-- ORDER BY first_name ASC, last_name DESC;
-- first name 이 먼저 정렬되고 난 후, 나온 결과 값에서 그 다음으로 last name이  정렬됨

-- <<직계 함수>>

-- 레코드 개수 세주는 함수
-- SELECT COUNT(emp_no)
-- FROM employees
-- WHERE emp_no = 10001;

-- 평균 
-- SELECT AVG(salary)
-- FROM salaries;

-- 최대, 최소
-- SELECT MIN(salary)
-- FROM salaries;

-- SELECT MAX(salary)
-- FROM salaries;

-- 그룹으로 묶어서 조회 : 
-- GROUP BY 컬럼명 [ HAVING 직계함수'조건', 필요시 사용 ]
-- SELECT title, COUNT(title)
-- FROM titles
-- GROUP BY title HAVING COUNT(title) >= 100000;

-- SELECT emp_no, AVG(salary)
-- FROM salaries
-- GROUP BY emp_no; -- HAVING AVG(salary) 조건 있을 때만 적음!

-- SELECT emp_no, AVG(salary)
-- FROM salaries
-- GROUP BY emp_no HAVING AVG(salary) >= 30000
-- AND AVG(salary) <= 50000;
-- 
-- 위와 같은 값
-- SELECT emp_no, AVG(salary)
-- FROM salaries
-- GROUP BY emp_no HAVING AVG(salary) BETWEEN 30000 AND 50000;

-- 별칭 : AS
-- SELECT emp_no, AVG(salary) AS avh_s
-- FROM salaries
-- GROUP BY emp_no HAVING avh_s >= 30000
-- AND avh_s <= 50000;

-- 문자열 합치기
-- SELECT CONCAT(last_name,' ', first_name) AS fullname
-- FROM employees;


-- 서브쿼리(SubQuery) : 쿼리 안에 쿼리가 있는 형태

-- SELECT *
-- FROM dept_manager
-- WHERE dept_no = (
-- 						SELECT dept_no
-- 						FROM dept_manager
-- 						WHERE emp_no = 110344
-- 					);

-- SELECT *
-- FROM dept_manager
-- WHERE emp_no = (
-- 						SELECT emp_no
-- 						FROM dept_manager
-- 						WHERE dept_no = 'd009'
-- 					);
-- subquery 값이 여러개라서 에러뜸! '=' 쓰면 안됨					
					
-- SELECT *
-- FROM dept_manager
-- WHERE emp_no IN (
-- 						SELECT emp_no
-- 						FROM dept_manager
-- 						WHERE dept_no = 'd009'
-- 					);
-- 

-- in, any 결과값 동일!

-- ANY : 조건이 맞으면 어떤 값이든 상관없음
-- SELECT *
-- FROM dept_manager
-- WHERE emp_no = ANY (
-- 						SELECT emp_no
-- 						FROM dept_manager
-- 						WHERE dept_no = 'd009'
-- 					);

-- All : 조건 모두 만족하는 결과값 보여줌

-- 사원별 급여 평균이 70,000이상인 사원의 사번, 이름, 성, 성별을 조회

-- SELECT emp_no, first_name, last_name, gender
-- FROM employees
-- WHERE emp_no IN (
-- 						SELECT emp_no
-- 						FROM salaries
-- 						GROUP BY emp_no 
-- 						HAVING AVG(salary) >= 70000
-- 					);
-- 

-- date 타입 속성 비교 방법
-- SELECT *
-- FROM titles
-- WHERE emp_no = 10009
-- 	AND to_date >= NOW();

-- 현재 직책이 senior engineer인 사원의 사원번호와 성을 조회
SELECT emp_no, last_name
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM titles
						WHERE title = 'Senior Engineer' 
						AND to_date >= NOW()
						);

ALTER TABLE employees ADD COLUMN sup_no INT(11);

-- JOIN 많이 쓸수록 속도 느려짐!!


-- 1. 사원의 사원번호, 풀네임, 직책명 출력
-- 2. 사원의 사원번호, 성별, 현재 월급 출력
-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력 출력
-- 4. 사원의 사원번호, 풀네임, 소속부서명 출력
-- 5. 현재 월급 상위 10위까지 사원의 사번, 풀네임, 월급 출력
-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력
-- 7. 현재 직책이 staff인 사원의 현재 평균 월급 출력
-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호 출력
-- 9. 현재 각 직급별 평균 월급 중 60000이상인 직급의 직급명, 평균월급(정수)출력 편균 월급 내림차순
-- 10. 성별이 여자인 사원들의 직급별 사원수 출력


-- 1. 사원의 사원번호, 풀네임, 직책명 출력
SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name) full_name, title_n.title
FROM employees emp
	INNER JOIN titles title_n
		ON emp.emp_no = title_n.emp_no
WHERE title_n.to_date >= NOW();
		
		
-- 2. 사원의 사원번호, 성별, 현재 월급 출력
SELECT emp.emp_no, emp.gender, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON sal.emp_no = emp.emp_no
WHERE sal.to_date >= NOW();


-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력 출력
SELECT CONCAT(emp.first_name, ' ', emp.last_name), sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;


-- 4. 사원의 사원번호, 풀네임, 소속부서명 출력
SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name)full_name, dep.dept_name
FROM employees emp
	INNER JOIN dept_emp dept_e
		ON emp.emp_no = dept_e.emp_no
	INNER JOIN departments dep
		ON dept_e.dept_no = dep.dept_no
WHERE dept_e.to_date >= NOW()
ORDER BY emp.emp_no;

		
-- 5. 현재 월급 상위 10위까지 사원의 사번, 풀네임, 월급 출력
SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name) full_name, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON sal.emp_no = emp.emp_no
WHERE sal.to_date >= NOW()
ORDER BY sal.salary DESC LIMIT 10;


		-- 중복된 값을 제거하기 위해서 rank 사용함!
		SELECT RNK.*
		FROM(
			SELECT emp.emp_no
			, CONCAT(emp.first_name, ' ', emp.last_name) full_name
			, sal.salary
			, RANK() over(ORDER BY sal.salary DESC) rn
			FROM employees emp
				INNER JOIN salaries sal
					ON sal.emp_no = emp.emp_no
			WHERE sal.to_date >= NOW()) RNK
		WHERE RNK.rn <= 10;

-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력
SELECT dep.dept_name, CONCAT(emp.first_name, ' ', emp.last_name) full_name, emp.hire_date
FROM dept_manager dep_m
	INNER JOIN departments dep
		ON dep_m.dept_no = dep.dept_no
	INNER JOIN employees emp
		ON dep_m.emp_no = emp.emp_no
WHERE dep_m.to_date >= NOW();
	
	
		-- d010 부서 나오게 하기, 없는 값은 null 나옴
SELECT dep.dept_name, CONCAT(emp.first_name, ' ', emp.last_name) full_name, emp.hire_date, dep.dept_no
FROM departments dep
	LEFT OUTER JOIN dept_manager dep_m
		ON dep_m.dept_no = dep.dept_no
	LEFT OUTER JOIN employees emp
		ON dep_m.emp_no = emp.emp_no;
		

-- 7. 현재 직책이 staff인 사원의 현재 평균 월급 출력
SELECT ti.title, AVG(sal.salary)
FROM titles ti
	INNER JOIN salaries sal
	ON ti.emp_no = sal.emp_no
WHERE ti.title = 'Staff' AND ti.to_date >= NOW() AND sal.to_date >= NOW();


-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호 출력
SELECT CONCAT(emp.first_name, ' ', emp.last_name)full_name, emp.hire_date, emp.emp_no, dept_m.dept_no
FROM dept_manager dept_m
	INNER JOIN employees emp
	ON emp.emp_no = dept_m.emp_no
WHERE dept_m.to_date < NOW(); -- where dept_m.to_date != '999901019


-- 9. 현재 각 직급별 평균 월급 중 60000이상인 직급의 직급명, 평균월급(정수)출력 편균 월급 내림차순
SELECT ti.title, TRUNCATE (AVG(sal.salary),0) trun
FROM titles ti
	INNER JOIN salaries sal
	ON ti.emp_no = sal.emp_no
WHERE ti.to_date >= NOW() AND sal.to_date >= NOW()
GROUP BY ti.title HAVING trun >= 60000
ORDER BY trun DESC;

		-- floor 사용
SELECT ti.title, FLOOR(AVG(sal.salary)) trun
FROM titles ti
	INNER JOIN salaries sal
	ON ti.emp_no = sal.emp_no
WHERE ti.to_date >= NOW() AND sal.to_date >= NOW()
GROUP BY ti.title HAVING trun >= 60000
ORDER BY trun DESC;


-- 10. 성별이 여자인 사원들의 직급별 사원수 출력
SELECT ti.title, COUNT(ti.title)
FROM employees emp
	INNER JOIN titles ti
	ON emp.emp_no = ti.emp_no
WHERE gender = 'F' AND ti.to_date >= NOW()
GROUP BY ti.title;

		-- count(*) 씀
SELECT ti.title, COUNT(*)
FROM employees emp
	INNER JOIN titles ti
	ON emp.emp_no = ti.emp_no
WHERE gender = 'F' AND ti.to_date >= NOW()
GROUP BY ti.title;





-- 11. 현재 퇴사한 성별, 사원수 
SELECT A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE('9999-01-01') 
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;



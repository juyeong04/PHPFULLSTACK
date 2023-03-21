CREATE OR REPLACE VIEW test_view
AS
	SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name) con, dep.dept_name
	FROM dept_emp dep_e
		INNER JOIN departments dep
			ON dep.dept_no = dep_e.dept_no
		INNER JOIN employees emp
			ON dep_e.emp_no = emp.emp_no
	WHERE dep_e.to_date >= NOW()
;

SELECT *
FROM test_view;

DROP VIEW test_view;

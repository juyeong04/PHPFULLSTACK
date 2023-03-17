CREATE VIEW test_view
AS
	SELECT ti.title, COUNT(*) cnt
	FROM employees emp
		INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
	WHERE gender = 'F' AND ti.to_date >= NOW()
	GROUP BY ti.title
;

-- Or replace : 기존 view 덮어씀, 속성값 변경하고 덮어쓰면 결과값 바뀜
CREATE OR REPLACE VIEW test_view 
AS
	SELECT ti.title, COUNT(*) cnt
	FROM employees emp
		INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
	WHERE gender = 'F' AND ti.to_date >= NOW()
	GROUP BY ti.title
;

SELECT * FROM test_view;

-- Drop view : view 삭제
DROP VIEW test_view;

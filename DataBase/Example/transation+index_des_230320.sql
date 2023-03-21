-- Transaction
	-- : 데이터 베이스의 작업 단위 commit 이나 rollback 연산이 있음

-- Index
	-- : 목차 / 값을 빠르게 찾기 위해 사용(검색 속도)
	-- 수정 안됨 걍 날림

SHOW INDEX FROM employees;  -- index 확인

CREATE INDEX idx_employees_last_name ON employees(last_name); -- index 추가

DROP INDEX idx_employees_last_name ON employees; -- index 삭제

SELECT * FROM employees WHERE last_name = 'Swan';
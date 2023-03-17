-- << 문자열 함수 >>

SELECT CONCAT('안녕하세요.', '좋은 아침입니다.');
-- : 문자열 컬럼, 문자열 컬럼 이어줄때 사용

SELECT CONCAT(first_name, ' ', last_name)
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS(' / ', 'a', 'b', 'c');
-- : / 가 문자열 사이사이에 자동 배치

SELECT FORMAT(123.456, 2);
-- : 소수점

SELECT LEFT('abcdefg', 3);
-- : 왼쭉부터 문자열 잘라줌

SELECT RIGHT('abcdefg', 3);
-- : 오른쪽부터 문자열 잘라줌

SELECT UPPER('abc');
-- : 소문자 --> 대문자 변환

SELECT LOWER('ABCabc');
-- : 대문자 --> 소문자 변환

SELECT LPAD('abc', 5, '@');
-- : 왼쪽에 문자열포함 길이만큼 채워줌

SELECT RPAD('abc', 5, '@');
-- : 오른쪽에 문자열포함 길이만큼 채워줌

SELECT TRIM(' abc   ');
-- : 공백 제거, 문자열 중간에 들어간 공백은 제거 안됨
SELECT LTRIM(' abc   ');
SELECT RTRIM(' abc   ');

SELECT TRIM(LEADING 'ab' FROM 'abcde'); -- 왼쪽 위치한 문자열 잘라줌
SELECT TRIM(TRAILING 'ab' FROM 'abcdeab'); -- 오른쪽 위치한 문자열 잘라줌

SELECT SUBSTRING('abcdef', 2, 3); -- (문자열, 시작위치, 길이)
SELECT SUBSTRING_INDEX('ab/cd/ef', '/', 2); -- (문자열, 구분자, 횟수)


-- << 수학함수 >>

SELECT CEILING(1.1); -- : 올림
SELECT FLOOR(1.9); -- : 버림
SELECT ROUND(1.6); -- : 반올림

SELECT TRUNCATE(2.12, 1);


-- <<  날짜, 시간 함수>>

SELECT NOW(); 
SELECT DATE(NOW());
SELECT DATETIME();
SELECT ADDDATE(NOW(), INTERVAL -1 DAY);
SELECT SUBDATE(NOW(), INTERVAL 1 DAY);

SELECT ADDTIME(NOW(), '-1:1:1');

-- << 순위 함수 >>

SELECT emp_no, RANK() OVER(ORDER BY salary ASC) r, salary
FROM salaries;
-- : 순위 / 2등 2명이면 1, 2, 2, 4등 순으로 나옴

SELECT emp_no, ROW_NUMBER() OVER(ORDER BY salary ASC) r, salary
FROM salaries;
-- : 레코드에 번호 매겨줌
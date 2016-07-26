create user mysqladimn1 identified  by 'mysqladminpass1';
grant all to mysqladimn1;

create user connectuser1 identified  by 'connectuserpass1';
grant create session to connectuser1;
grant select table to connectuser1;

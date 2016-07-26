create role ordersystem_sys_role;
grant all on ordersystem.* to ordersystem_sys_role;

create role connect_role;
grant create, select, insert, update on ordersystem.* to connect_role;

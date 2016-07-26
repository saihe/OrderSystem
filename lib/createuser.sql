create user ordersystemadmin1 identified  by 'ordersystemadminpass1';
grant ordersystem_sys_role on ordersystem.* to ordersystemadmin1;

create user connectuser1 identified  by 'connectuserpass1';
grant connect_role on ordersystem.* to connectuser1;

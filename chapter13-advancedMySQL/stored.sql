-- delimiter //
-- create procedure total_orders(out total float)
-- BEGIN
-- 	select sum(amount) into total from orders;
-- END
-- //
-- delimiter ;
-- call total_orders(@t);
-- delimiter //
-- create procedure totals(out total float)
-- BEGIN
-- 	select sum(amount) into total from orders;
-- END
-- //
-- delimiter ;
-- call totals(@t);

-- delimiter //

-- create function add_tax(price float) returns float
-- 	return price*2;
-- 	//
-- 	delimiter ;
-- 	select add_tax(20);

-- 	delimiter //

-- create function add_tax1(price float) returns float
-- 	BEGIN
-- 	declare tax float default 0.5;
-- 	return price*(1+tax);
-- 	END

-- 	//
-- 	delimiter ;
-- 	select add_tax1(20);
 delimiter //
 create procedure largest(out largest_id int)
 	BEGIN
 	declare this_id int;
 	declare this_a float;
 	declare l_a float default 0.0;
 	declare l_id int;

 	declare done int default 0;
 	 	declare c1 cursor for select orderid,amount from orders;
 	declare continue handler for sqlstate '02000' set done=1;

 	open c1;
 	repeat
 		fetch c1 into this_id,this_a;
 		if not done then
 		 if this_a>l_a then
 		 set l_a=this_a;
 		 set l_id=this_id;
 		 end if;
 		 end if;
 		 until done end repeat;
 		 close c1;

 		 set largest_id=l_id;
 		 end
 		 //
 		 delimiter ;

 		 call largest(@l);
 		 select @l;

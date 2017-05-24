explain
select customers.name
from customers,orders,order_item,books
where customers.customerid=orders.customerid
and orders.orderid=order_item.orderid
and order_item.isbn=books.isbn
and books.title like '%Java%'\G;

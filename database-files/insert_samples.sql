INSERT INTO Users (first_name, last_name, email, password)
VALUES ('John', 'Doe', 'john@example.com', 'hashed_password');

INSERT INTO Users (first_name, last_name, email, password)
VALUES ('Jane', 'Smith', 'jane@example.com', 'hashed_password');

INSERT INTO Products (name, description, price, stock_quantity)
VALUES ('Product 1', 'Description for Product 1', 19.99, 100);

INSERT INTO Products (name, description, price, stock_quantity)
VALUES ('Product 2', 'Description for Product 2', 29.99, 50);

-- Note: user_id must be an existing user_id from the Users table
INSERT INTO Carts (user_id) VALUES (1);

INSERT INTO Carts (user_id) VALUES (2);

-- Note: cart_id and product_id must be existing values from their respective tables
INSERT INTO CartItems (cart_id, product_id, quantity)
VALUES (1, 1, 2);

INSERT INTO CartItems (cart_id, product_id, quantity)
VALUES (1, 2, 1);

-- Note: user_id must be an existing user_id from the Users table
INSERT INTO Orders (user_id, total_amount, status)
VALUES (1, 49.98, 'pending');

INSERT INTO Orders (user_id, total_amount, status)
VALUES (2, 29.99, 'shipped');

-- Note: order_id and product_id must be existing values from their respective tables
INSERT INTO OrderItems (order_id, product_id, quantity, item_price, total_price)
VALUES (1, 1, 1, 19.99, 19.99);

INSERT INTO OrderItems (order_id, product_id, quantity, item_price, total_price)
VALUES (1, 2, 1, 29.99, 29.99);

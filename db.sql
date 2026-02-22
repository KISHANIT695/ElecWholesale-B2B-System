CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    price DECIMAL(10,2),
    view_count INT DEFAULT 0,
    category VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firm_name VARCHAR(255),
    gst_number VARCHAR(15),
    phone VARCHAR(15),
    address TEXT
);

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    product_id INT,
    quantity INT,
    order_status VARCHAR(50) DEFAULT 'Pending'
);

CREATE TABLE IF NOT EXISTS addons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    feature_name VARCHAR(50),
    status ENUM('on', 'off') DEFAULT 'on'
);

-- शुरुआती डेटा (उदाहरण के लिए)
INSERT INTO addons (feature_name, status) VALUES ('bulk_calculator', 'on'), ('whatsapp_chat', 'on');

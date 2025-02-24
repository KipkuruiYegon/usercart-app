import React from 'react';
import { Link } from 'react-router-dom';  // Import Link for routing

const Navbar = () => {
  return (
    <nav className="navbar">
      <div className="navbar-container">
        <Link to="/" className="navbar-logo">Shop</Link>
        <ul className="navbar-links">
          <li className="navbar-item">
            <Link to="/products" className="navbar-link">Products</Link>
          </li>
          <li className="navbar-item">
            <Link to="/cart" className="navbar-link">Cart</Link>
          </li>
          <li className="navbar-item">
            <Link to="/about" className="navbar-link">About</Link>
          </li>
        </ul>
      </div>
    </nav>
  );
};

export default Navbar;

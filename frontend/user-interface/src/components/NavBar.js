import React from "react";
import { Link } from "react-router-dom";
import "./NavBar.css";  // Import the CSS file for styling

const NavBar = () => {
  return (
    <nav className="navbar">
      <div className="navbar-container">
        {/* Logo */}
        <Link to="/" className="navbar-logo">
          JUMIA
        </Link>

        {/* Search Bar */}
        <div className="search-container">
          <input
            type="text"
            className="search-input"
            placeholder="Search products, brands and categories"
          />
          <button className="search-button">Search</button>
        </div>

        {/* Account and Cart */}
        <div className="navbar-links">
          <Link to="/account" className="navbar-link">Account</Link>
          <Link to="/help" className="navbar-link">Help</Link>
          <Link to="/cart" className="navbar-link cart-icon">
            <span className="cart-icon-text">Cart</span>
          </Link>
        </div>
      </div>
    </nav>
  );
};

export default NavBar;

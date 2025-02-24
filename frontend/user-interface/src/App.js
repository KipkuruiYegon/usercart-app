import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom"; // Corrected import for Routes

import NavBar from "./components/NavBar"; // Correct import for NavBar
import ProductList from "./components/ProductList"; // Correct import for ProductList
import './App.css';

function App() {
  return (
    <Router>
      <NavBar />
      <div className="main-content">
        <h1>Welcome to My E-commerce Store</h1>
        <Routes> {/* Using Routes instead of Switch */}
          <Route path="/products" element={<ProductList />} /> {/* Using element prop */}
          <Route path="/" element={<h1>Home Page</h1>} /> {/* Using element prop */}
        </Routes>
      </div>
    </Router>
  );
}

export default App;

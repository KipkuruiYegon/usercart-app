import React from "react";
import Navbar from "./components/NavBar"; // Import Navbar component
import ProductList from "./components/ProductList"; // Import ProductList component
import './App.css'; // Optional: to add custom styles

function App() {
  return (
    <div>

      <Navbar />

      <div className="main-content">
        <h1>Welcome to My E-commerce Store</h1>
        <ProductList />
      </div>
    </div>
  );
}

export default App;

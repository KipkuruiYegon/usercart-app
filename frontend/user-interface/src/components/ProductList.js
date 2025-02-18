import React, { useEffect, useState } from "react";
import { getProducts, addToCart } from "../services/api";

const ProductList = () => {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    const fetchProducts = async () => {
      const data = await getProducts();
      setProducts(data);
    };
    fetchProducts();
  }, []);

  const handleAddToCart = async (productId) => {
    await addToCart(productId);
    alert("Product added to cart!");
  };

  return (
    <div>
      <h2>Products</h2>
      <ul>
        {products.map((product) => (
          <li key={product.id}>
            <img src={product.image} alt={product.name} width="100" />
            <h3>{product.name}</h3>
            <p>{product.description}</p>
            <p>Price: KSH {product.price}</p>
            <button onClick={() => handleAddToCart(product.id)}>
              Add to Cart
            </button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default ProductList;

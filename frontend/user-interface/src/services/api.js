import axios from "axios";

const API_URL = "http://127.0.0.1:8000/api";

// Fetch all products
export const getProducts = async () => {
  try {
    const response = await axios.get(`${API_URL}/products`);
    return response.data;
  } catch (error) {
    console.error("Error fetching products:", error);
    return [];
  }
};

// Add item to cart
export const addToCart = async (productId) => {
  try {
    const response = await axios.post(`${API_URL}/cart/add`, {
      product_id: productId,
    });
    return response.data;
  } catch (error) {
    console.error("Error adding to cart:", error);
    return null;
  }
};

// View cart
export const getCart = async () => {
  try {
    const response = await axios.get(`${API_URL}/cart`);
    return response.data;
  } catch (error) {
    console.error("Error fetching cart:", error);
    return {};
  }
};

// Remove item from cart
export const removeFromCart = async (productId) => {
  try {
    const response = await axios.delete(`${API_URL}/cart/remove/${productId}`);
    return response.data;
  } catch (error) {
    console.error("Error removing item from cart:", error);
    return null;
  }
};

// Place order
export const placeOrder = async () => {
  try {
    const response = await axios.post(`${API_URL}/orders`);
    return response.data;
  } catch (error) {
    console.error("Error placing order:", error);
    return null;
  }
};

// Get all orders
export const getOrders = async () => {
  try {
    const response = await axios.get(`${API_URL}/orders`);
    return response.data;
  } catch (error) {
    console.error("Error fetching orders:", error);
    return [];
  }
};

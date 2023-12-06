import { Route, Routes } from "react-router-dom";
import Login from "./pages/login";
import Home from "./pages/home";
import Cart from "./pages/cart";

function App() {
    return (
        <div className="App">
            <Routes>
                <Route path="/" element={<Home />}></Route>
                <Route path="/cart" element={<Cart />}></Route>
                <Route path="/login" element={<Login />}></Route>
            </Routes>

        </div>
    );
}

export default App;


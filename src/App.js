import {Routes, Route} from "react-router-dom";
//import Index from "./index.js";
import Dashboard from "./pages/Dashboard";
import Home from "./Home";


function App() {
  return (
    <div className="App" >
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/Dashboard" element={<Dashboard />} />
      </Routes>
    </div> 
  );
}


export default App;

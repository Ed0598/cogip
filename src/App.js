import {Routes, Route} from "react-router-dom";
//import Index from "./index.js";
import Dashboard from "./pages/Dashboard";
import Home from "./pages/Home";
import Invoices from "./pages/Invoices";
import Contacts from "./pages/Contacts";
import Companies from "./pages/Companies";
import NewInvoice from "./pages/Newinvoice";
import PrivacyPolicy from "./pages/Privacypolicy";
import ShowInvoices from "./pages/ShowInvoices";


function App() {
  return (
    <div className="App" >
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/Dashboard" element={<Dashboard />} />
        <Route path="/NewInvoice" element={<NewInvoice />} />
        <Route path="/Invoices" element={<Invoices />} />
        <Route path="/Invoices/:id" element={<ShowInvoices />} />
        <Route path="/Contacts" element={<Contacts />} />
        <Route path="/Companies" element={<Companies />} />
        <Route path="/PrivacyPolicy" element={<PrivacyPolicy />} />

      </Routes>
    </div> 
  );
}


export default App;

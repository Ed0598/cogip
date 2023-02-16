
import * as React from 'react';
import {BrowserRouter as Router, Route, Routes} from "react-router-dom";
import ReactDOM from "react-dom/client";
import Dashboard from "./pages/Dashboard";
import Home from "./pages/Home";
import Invoices from "./pages/Invoices";
import Contacts from "./pages/Contacts";
import Companies from "./pages/Companies";
import NewInvoice from "./pages/Newinvoice";
import PrivacyPolicy from "./pages/Privacypolicy";
import ShowCompanies from "./pages/ShowCompanies";
import ShowContacts from "./pages/showcontact";
import ShowInvoices from "./pages/ShowInvoices";
import NewContact from "./pages/NewContact";
import NewCompany from './pages/Newcompany';
import FormContact from './FormContact';

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/Dashboard" element={<Dashboard />} />
        <Route path="/NewInvoice" element={<NewInvoice />} />
        <Route path="/Invoices" element={<Invoices />} />
        <Route path="/Contacts" element={<Contacts />} />
        <Route path="/Companies" element={<Companies />} />
        <Route path="/Companies/:id" element={<ShowCompanies />} />
        <Route path="/PrivacyPolicy" element={<PrivacyPolicy />} />
        <Route path="/Contacts/:id" element={<ShowContacts />} />
        <Route path="/Invoices/:id" element={<ShowInvoices />} />

        <Route path="Dashboard" element={<Dashboard />}>
          <Route path="NewCompany" element={<NewCompany />} />
          <Route path="FormContact" element={<FormContact />} />
        </Route>
      </Routes>
    </Router>
  </React.StrictMode>
);



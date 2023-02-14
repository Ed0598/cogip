
import * as React from 'react';
import {createBrowserRouter, RouterProvider} from "react-router-dom";
import * as ReactDOM from "react-dom";
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


const router = createBrowserRouter([
  {
    path: "/",
    element: <Home />,
  },
  {
    path: "/Dashboard",
    element: <Dashboard />,
  },
  {
    path: "/NewInvoice",
    element: <NewInvoice />,
  },
  {
    path: "/Invoices",
    element: <Invoices />,
  },
  {
    path: "/Contacts",
    element: <Contacts />,
  },
  {
    path: "/Companies",
    element: <Companies />,
    
  },
  {
    path: "/Companies/:id",
    element: <ShowCompanies />,
  },
  {
    path: "/PrivacyPolicy",
    element: <PrivacyPolicy />,
  },
  {
    path: "/Contacts/:id",
    element: <ShowContacts />,
  },
  {
    path: "/Invoices/:id",
    element: <ShowInvoices />,
  },
]);
ReactDOM.createRoot(document.getElementById("root")).render(
  <RouterProvider router={router} />
);


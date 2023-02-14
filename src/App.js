
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
    path: "/ShowInvoices",
    element: <ShowInvoices />,
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
    path: "/PrivacyPolicy",
    element: <PrivacyPolicy />,
  },
]);
ReactDOM.createRoot(document.getElementById("root")).render(
  <RouterProvider router={router} />
);


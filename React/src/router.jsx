import { createBrowserRouter } from "react-router-dom"
import Index from './views/index.jsx'
import Login from "./views/login.jsx"
import Register from "./views/register.jsx"

//LAS RUTAS 

const router = createBrowserRouter([
    {
        path: '/index',
        element:<Index />
    },
    {
        path: '/login',
        element:<Login/>
    },
    {
        path:'/register',
        element:<Register/>
    }

])

export default router;
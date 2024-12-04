import '../index.css'
import { Link } from 'react-router-dom';

function Index() {
  return (
    <>
    <div className="text-3xl font-bold underline">
      <h1>Página Principal</h1>
      <p>Bienvenido a la página principal.</p>
      {/* Enlace a la página "About" */}
      <Link to="/login">Login</Link>
    </div> 
    </>
  )
}
export default Index

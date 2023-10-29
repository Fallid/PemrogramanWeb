import "bootstrap/dist/css/bootstrap.min.css";
import ilab from "../Assets/logo-ilab.png";
const Navbar = () => {
  return (
    <header>
      <nav className="navbar navbar-expand-lg bg-body-tertiary">
        <div className="container-fluid">
          <a className="navbar-brand" href="#">
            <img className="w-75" src={ilab} alt="" />
          </a>
          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon"></span>
          </button>
          <div
            className="collapse navbar-collapse justify-content-center"
            id="navbarNavAltMarkup"
          >
            <div className="navbar-nav">
              <a className="nav-link active" href="#">
                HOME
              </a>
              <a className="nav-link active" href="#">
                ABOUT US
              </a>
              <a className="nav-link active" href="#">
                CONTACT
              </a>
            </div>
          </div>
          <button className="btn btn-outline-dark me-2 px-3 py-1">
            <span className="fs-6">SIGN UP</span>
          </button>
          <button className="btn btn-primary me-3 px-4 py-1">
            <span className="fs-6">LOG IN</span>
          </button>
        </div>
      </nav>
    </header>
  );
};

export default Navbar;

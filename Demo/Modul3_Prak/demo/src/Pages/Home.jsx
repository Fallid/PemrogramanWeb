import { Fragment } from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import Navbar from "../Components/Navbar";
import Footer from "../Components/Footer";
import HeroHome from "../Components/HeroHome";

const Home = () => {
  return (
    <Fragment>
      <Navbar />
      <HeroHome />
      {/* <main className="my-5 py-5">
        <h1>Home Page</h1>
      </main> */}
      <Footer />
    </Fragment>
  );
};

export default Home;

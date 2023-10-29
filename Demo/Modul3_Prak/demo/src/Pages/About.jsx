import { Fragment } from "react";
import Navbar from "../Components/Navbar";
import Footer from "../Components/Footer";
import HeroAbout from "../Components/HeroAbout";
const About = () => {
  return (
    <Fragment>
      <Navbar />
      <HeroAbout />
      {/* <main className="my-5 py-5">
        <h1>About Page</h1>
      </main> */}
      <Footer />
    </Fragment>
  );
};

export default About;

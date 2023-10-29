import "./HeroContact.css";
const HeroContact = () => {
  return (
    <div className="container-fluid d-flex justify-content-center  mt-4 md-4 content">
      <table>
        <tr>
          <th>
            <h4>The Office</h4>
          </th>
          <th>
            <h4>Business Hours</h4>
          </th>
          <th>
            <h4>Form System Issue Tracker</h4>
          </th>
        </tr>
        <tr>
          <th>
            <h6>
              Address:{" "}
              <span> Jl. Raya Tlogomas No.246,Jawa Timur 65144, Indonesia</span>
            </h6>
          </th>
          <th>
            <p>Monday - Friday 8am to 4pm</p>
          </th>

          <p className="forms">
            Link:{" "}
            <a href="/" placeholder="Google Form">
              Google Form
            </a>
          </p>
        </tr>
        <tr>
          <th>
            <h6>
              Phone: <span>(0341) 464318, ext 252</span>
            </h6>
          </th>
          <th>
            <p>Saturday - 8am to 12pm</p>
          </th>
        </tr>
        <tr>
          <th>
            <h6>
              Email: <span>lab.informatika@umm.ac.id</span>
            </h6>
          </th>
          <th>
            <p>Sunday - Closed</p>
          </th>
        </tr>
      </table>
    </div>
  );
};
export default HeroContact;

import Illu_header from './assets/images/Illu_header.svg';
import Rectangle_blanc from './assets/images/Rectangle_blanc.svg';
function Manage(){
    return(
        <>
        <div className="header__manage">
            <h2>
                MANAGE YOUR CUSTOMERS AND INVOICES EASLY
            </h2>
            <img src={Illu_header} alt="#" />
        </div>
        <img src={Rectangle_blanc} alt="#" />
        </>
    )
}
export default Manage;
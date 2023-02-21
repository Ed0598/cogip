import { Box, Divider, Flex, Spacer, Stack, VStack, HStack } from '@chakra-ui/react';
import Navbar from './Navbar';
import Map from '../assets/images/Map.svg';
import Phone from '../assets/images/Tel.svg';
import Fax from '../assets/images/Fax.svg';
import Facebook from '../assets/images/Facebook.svg';
import Twitter from '../assets/images/Twitter.svg';
import LinkedIn from '../assets/images/LinkedIn.svg';
import Youtube from '../assets/images/Youtube.svg';
import Instagram from '../assets/images/Instagram.svg';
import GooglePlus from '../assets/images/GooglePlus.svg';
import Pinterest from '../assets/images/Pinterest.svg';
import RSS from '../assets/images/RSS.svg';

function Footer () {
    return (
        <footer>
            <hr className='hr-yellow'/>
            <div className="block-footer">
                <div>
                    <h3 className='footer__title'>COGIP</h3>
                </div>
                <div className='infos'>
                    <div className='map'>
                        <img src={Map} alt="Map location icon" />
                        <h4>Square des Martyrs, 6000 Charleroi</h4>
                    </div>
                    <div className='phone-fax'>
                        <div className='phone'>
                        <img src={Phone} alt="Phone icon"/>
                        <h4>[123] 456-7890</h4>
                        </div>
                        <div className='fax'>
                            <img src={Fax} alt="Fax icon"/>
                            <h4>[123] 456-7890</h4>
                        </div>
                    </div>
                    
                    <div className='social-media'>
                        <h5>Social Media</h5>
                        <img src={Facebook} alt="Facebook icon"/>
                        <img src={Twitter} alt="Twitter icon"/>
                        <img src={LinkedIn} alt="LinkedIn icon"/>
                        <img src={Youtube} alt="Youtube icon"/>
                        <img src={Instagram} alt="Instagram icon"/>
                        <img src={GooglePlus} alt="Google Plus icon"/>
                        <img src={Pinterest} alt="Pinterest icon"/>
                        <img src={RSS} alt="RSS icon"/>
                    </div>
                    
                </div>
            </div>

            

            <Navbar />


        </footer>

    )
}

export default Footer;
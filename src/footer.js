import { Box, Divider, Flex, Spacer } from '@chakra-ui/react';
import Map from './assets/images/Map.svg';
import Phone from './assets/images/Tel.svg';
import Fax from './assets/images/Fax.svg';
import Facebook from './assets/images/Facebook.svg';
import Twitter from './assets/images/Twitter.svg';
import LinkedIn from './assets/images/LinkedIn.svg';
import Youtube from './assets/images/Youtube.svg';
import Instagram from './assets/images/Instagram.svg';
import GooglePlus from './assets/images/GooglePlus.svg';
import Pinterest from './assets/images/Pinterest.svg';
import RSS from './assets/images/RSS.svg';

function Footer () {
    return (
        <footer>
            <Divider orientation='horizontal' />
            <Flex>
                <Box>
                    <h3>COGIP</h3>
                </Box>
                <Box>
                    <Flex>
                        <img src={Map} alt="Map location icon"/><h4>Square des Martyrs, 6000 Charleroi</h4>
                    </Flex>
                    <Flex>
                        <Box>
                        <img src={Phone} alt="Phone icon"/>
                        <h4>[123] 456-7890</h4>
                        </Box>
                        <Box>
                            <img src={Fax} alt="Fax icon"/>
                            <h4>[123] 456-7890</h4>
                        </Box>
                    </Flex>
                    <Flex>
                        <h5>Social Media</h5>
                        <img src={Facebook} alt="Facebook icon"/>
                        <img src={Twitter} alt="Twitter icon"/>
                        <img src={LinkedIn} alt="LinkedIn icon"/>
                        <img src={Youtube} alt="Youtube icon"/>
                        <img src={Instagram} alt="Instagram icon"/>
                        <img src={GooglePlus} alt="Google Plus icon"/>
                        <img src={Pinterest} alt="Pinterest icon"/>
                        <img src={RSS} alt="RSS icon"/>
                    </Flex>
                </Box>
            </Flex>
            <Divider orientation='horizontal' />




        </footer>

    )
}

export default Footer;
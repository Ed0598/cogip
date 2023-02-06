import { Box, Divider } from '@chakra-ui/react';



function Footer () {
    return (
        <footer>
            <Divider orientation='horizontal' />
            <Box>
                <h3>COGIP</h3>
            </Box>
            <Box>
                <Box>
                    <img src="/public/assets/images/Map.svg" alt="Map location icon"/>
                    <h4>345 Faulconer Drive, Suite 4, Charlottesville, CA, 12345</h4>
                </Box>
                <Box>
                    <Box>
                      <img src="public/assets/images/Tel.svg" alt="Telephon icon"/>
                      <h4>[123] 456-7890</h4>
                    </Box>
                    <Box>
                        <img src="public/assets/images/Fax.svg" alt="Fax icon"/>
                        <h4>[123] 456-7890</h4>
                    </Box>
                </Box>
                <Box>
                    <h5>Social Media</h5>
                    <img src="public/assets/images/Facebook.svg" alt="Facebook icon"/>
                    <img src="public/assets/images/Twitter.svg" alt="Twitter icon"/>
                    <img src="public/assets/images/LinkedIn.svg" alt="LinkedIn icon"/>
                    <img src="public/assets/images/Youtube.svg" alt="Youtube icon"/>
                    <img src="public/assets/images/Instagram.svg" alt="Instagram icon"/>
                    <img src="public/assets/images/GooglePlus.svg" alt="Google Plus icon"/>
                    <img src="public/assets/images/Pinterest.svg" alt="Pinterest icon"/>
                    <img src="public/assets/images/RSS.svg" alt="RSS icon"/>
                </Box>
            </Box>
            <Divider orientation='horizontal' />




        </footer>

    )
}

export default Footer;
import Group_work from './assets/images/Group_work.svg';

function Work(){
    return(
        <>
        <div class="work">
            <div class="title_work">
            <h2>WORK BETTER IN YOUR COMPANY</h2>
            </div>
            <div className='illus'>
            <img className='group_work' src={Group_work} alt="#"  />
            </div>
        </div>
        </>
    )
}
export default Work;
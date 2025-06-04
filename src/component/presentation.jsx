import image1 from '../assets/image1.jpg'
export default function Presentation2() {
    
    return (
        
        <section className="relative max-w-screen-xl mx-auto py-4 px-4 md:px-8">
            <div className="absolute top-0 left-0 w-full h-full bg-white opacity-40"></div>
            <div className="relative z-10 gap-5 items-center lg:flex">

               
              
                <div className="flex-1 max-w-lg py-5 sm:mx-auto sm:text-center lg:max-w-max lg:text-left">
                    <h3 className="text-3xl text-gray-800 font-semibold md:text-4xl">
                        Se reconvertir intelligemment <span className="text-indigo-600"></span>
                    </h3>
                    <p className="text-gray-500 leading-relaxed mt-3">
                            Changer de métier n’est pas une faiblesse. C’est un acte de courage.Chez IFDCE, nos formations certifiantes et diplômantes 100% en ligne vous accompagnent dans votre reconversion.Topographie, management, design, informatique… On est là pour vous.

                    </p>
                   {/* <a
                        className="mt-5 px-4 py-2 text-indigo-600 font-medium bg-indigo-50 rounded-full inline-flex items-center"
                        href="javascript:void()">
                        Try it out
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6 ml-1 duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    */}
                
                </div>
                    <div className="flex-1 mt-5 mx-auto sm:w-9/12 lg:mt-0 lg:w-auto">
                        <img 
                          src={image1}
                          alt="" 
                           className="w-full" 
                         />
                </div>
                
                
            </div>
        </section>
       
        );
        }
import photograph from '../assets/photograph.png';


export default function Bloc() {
    return (
        <section 
            style={{
                backgroundImage: `url(${photograph})`,
                backgroundSize: 'cover',
                backgroundPosition: 'center'
            }}
            className='h-screen relative flex items-center justify-center'
        >
            <div className='absolute inset-0 bg-gradient-to-r from-blue-900/80 via-blue-800/70 to-blue-900/80'></div>
            
            <div className='relative z-10 text-center text-white max-w-4xl mx-auto px-6'>
                <div className="mb-8">
                 
                </div>
                
                <h1 className='text-4xl md:text-6xl font-bold leading-tight mb-6'>
                    Bienvenue à l'Institut de Formation de Développement 
                    <span className="block text-blue-300">de Compétences et d'Excellence</span>
                </h1>
                
                <p className="text-xl md:text-2xl text-blue-100 mb-8 font-light">
                    Complétez le nom complet de l'institut
                </p>
                
                <div className="bg-white/10 backdrop-blur-sm rounded-xl p-6 mb-8">
                    <p className="text-lg text-white/90">
                      tu choisi de suivre une formation en présentiel ou à distance,
                      tu as la possibilité de suivre des cours en ligne à ton rythme,
                    </p>
                </div>
                
                <div className="flex flex-col sm:flex-row gap-4 justify-center">
                    <button className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Découvrir nos formations
                    </button>
                    <button className="border-2 border-white text-white hover:bg-white hover:text-blue-900 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300">
                        Formations en présentiel
                    </button>
                </div>
            </div>
        </section>
    );
}
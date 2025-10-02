import { Quote } from "lucide-react";

const testimonials = [
  {
    video: "/videos/testimonial-1.mp4",
    name: "Isabel",
    description: "Conquistou autonomia e independência",
  },
  {
    video: "/videos/testimonial-2.mp4",
    name: "Aluna MASD",
    description: "Superou o medo e dirige com confiança",
  },
  {
    video: "/videos/testimonial-3.mp4",
    name: "Aluna MASD",
    description: "Realizou o sonho de dirigir",
  },
  {
    video: "/videos/testimonial-4.mp4",
    name: "Aluna MASD",
    description: "Transformou sua vida",
  },
];

export const Testimonials = () => {
  return (
    <section className="py-20 px-4 bg-white">
      <div className="max-w-6xl mx-auto">
        <h2 className="text-3xl md:text-5xl font-bold text-teal text-center mb-4">
          Histórias de transformação reais
        </h2>
        <p className="text-xl text-center text-muted-foreground mb-16">
          Veja o que alunas que já conquistaram sua liberdade têm a dizer
        </p>

        <div className="grid md:grid-cols-2 gap-8 mb-12">
          {testimonials.map((testimonial, index) => (
            <div key={index} className="bg-secondary rounded-2xl overflow-hidden shadow-lg">
              <video
                controls
                className="w-full aspect-video bg-gray-900"
                preload="metadata"
              >
                <source src={testimonial.video} type="video/mp4" />
                Seu navegador não suporta o elemento de vídeo.
              </video>
              <div className="p-6">
                <h3 className="text-xl font-bold text-teal mb-1">{testimonial.name}</h3>
                <p className="text-muted-foreground">{testimonial.description}</p>
              </div>
            </div>
          ))}
        </div>

        <div className="bg-gold/10 border-l-4 border-gold rounded-lg p-8 max-w-3xl mx-auto">
          <Quote className="h-10 w-10 text-gold mb-4" />
          <p className="text-lg text-foreground italic">
            "Tinha CNH há 6 anos e nunca dirigi sozinha. Em poucos dias já estava dirigindo sem medo."
          </p>
        </div>
      </div>
    </section>
  );
};

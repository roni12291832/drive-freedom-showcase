import { Award, Brain, TrendingUp } from "lucide-react";
import marciaPhoto from "@/assets/marcia-photo.jpg";

const features = [
  {
    icon: Award,
    title: "Método Validado",
    description: "Testado e aprovado em centenas de atendimentos presenciais",
  },
  {
    icon: Brain,
    title: "Especialista em Ansiedade",
    description: "Anos de experiência tratando medos e ansiedade na prática clínica",
  },
  {
    icon: TrendingUp,
    title: "Resultados Comprovados",
    description: "Mulheres de todo Brasil já conquistaram sua independência",
  },
];

export const About = () => {
  return (
    <section className="py-20 px-4 bg-white">
      <div className="max-w-6xl mx-auto">
        <div className="text-center mb-4">
          <span className="text-gold text-sm font-medium">Criadora do Método</span>
        </div>

        <h2 className="text-3xl md:text-5xl font-bold text-teal text-center mb-16">
          Conheça a Psicóloga Márcia Mattos
        </h2>

        <div className="grid md:grid-cols-2 gap-12 items-center mb-16">
          <div className="order-2 md:order-1">
            <div className="space-y-6 text-lg text-foreground">
              <p>
                <span className="font-bold text-teal">Psicóloga clínica especialista</span> em
                ansiedade e medos, Márcia Mattos criou o Método MASD após anos de experiência
                ajudando mulheres a superarem o medo de dirigir.
              </p>
              <p>
                O que antes era oferecido apenas em atendimentos presenciais de{" "}
                <span className="font-bold">R$1.350</span>, agora está acessível a todas as
                mulheres que desejam conquistar sua liberdade no volante.
              </p>
              <p>
                Com uma abordagem que vai além da prática, Márcia trabalha a{" "}
                <span className="font-bold text-teal">raiz emocional</span> do medo,
                proporcionando resultados duradouros e transformadores.
              </p>
            </div>
          </div>

          <div className="order-1 md:order-2">
            <div className="relative">
              <img
                src={marciaPhoto}
                alt="Psicóloga Márcia Mattos"
                className="rounded-2xl shadow-2xl w-full"
              />
            </div>
          </div>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {features.map((feature, index) => {
            const Icon = feature.icon;
            return (
              <div key={index} className="text-center space-y-4">
                <div className="w-16 h-16 bg-teal-light rounded-full flex items-center justify-center mx-auto">
                  <Icon className="h-8 w-8 text-teal" />
                </div>
                <h3 className="text-xl font-bold text-teal">{feature.title}</h3>
                <p className="text-muted-foreground">{feature.description}</p>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

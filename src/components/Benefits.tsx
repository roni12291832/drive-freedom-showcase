import { Check, Car, Shield, Briefcase, Wallet, ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";

const benefits = [
  {
    icon: Car,
    title: "Liberdade Total",
    description: "Vá onde quiser, quando quiser, sem depender de ninguém",
  },
  {
    icon: Shield,
    title: "Confiança no Volante",
    description: "Dirija com segurança e tranquilidade, sem ansiedade",
  },
  {
    icon: Briefcase,
    title: "Novas Oportunidades",
    description: "Aceite aquele emprego ou projeto que exige mobilidade",
  },
  {
    icon: Wallet,
    title: "Economia e Praticidade",
    description: "Economize com Uber e tenha total autonomia no dia a dia",
  },
];

const achievements = [
  "Levar seus filhos na escola sem depender de ninguém",
  "Viajar sem medo e com total autonomia",
  "Assumir oportunidades profissionais que antes não podia",
  "Sentir-se orgulhosa e confiante ao volante",
];

export const Benefits = () => {
  return (
    <section className="py-20 px-4 bg-gradient-to-b from-teal-light to-white">
      <div className="max-w-6xl mx-auto">
        <div className="text-center mb-16">
          <h2 className="text-2xl sm:text-3xl md:text-5xl font-bold text-teal mb-4 px-4">
            Imagine sua vida com total liberdade para dirigir
          </h2>
          <p className="text-base sm:text-lg md:text-xl text-muted-foreground px-4">
            É hora de transformar o medo em confiança e conquistar a independência que você merece
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
          {benefits.map((benefit, index) => {
            const Icon = benefit.icon;
            return (
              <div key={index} className="text-center space-y-4">
                <div className="w-16 h-16 bg-gold/10 rounded-full flex items-center justify-center mx-auto border-2 border-gold/20">
                  <Icon className="h-8 w-8 text-gold" />
                </div>
                <h3 className="text-xl font-bold text-teal">{benefit.title}</h3>
                <p className="text-muted-foreground">{benefit.description}</p>
              </div>
            );
          })}
        </div>

        <div className="bg-white rounded-2xl shadow-lg p-8 md:p-12">
          <div className="grid md:grid-cols-2 gap-6">
            {achievements.map((achievement, index) => (
              <div key={index} className="flex items-start gap-3">
                <Check className="h-6 w-6 text-gold flex-shrink-0 mt-1" />
                <p className="text-lg text-foreground">{achievement}</p>
              </div>
            ))}
          </div>

          <div className="mt-8 text-center">
            <Button 
              size="lg" 
              className="bg-gold hover:bg-gold/90 text-teal font-bold text-base md:text-lg px-6 md:px-8 py-4 md:py-6 rounded-lg shadow-lg hover:shadow-xl transition-all w-full sm:w-auto"
              asChild
            >
              <a href="https://pay.kiwify.com.br/f1hS5iq" target="_blank" rel="noopener noreferrer">
                Começar minha transformação
                <ArrowRight className="ml-2 h-4 w-4 md:h-5 md:w-5" />
              </a>
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

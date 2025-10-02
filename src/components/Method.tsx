import { Brain, Heart, BookOpen, Users, Clock, Shield, Infinity } from "lucide-react";

const methodFeatures = [
  {
    icon: Brain,
    title: "Técnicas de Controle da Ansiedade",
    description: "Aprenda a gerenciar seus pensamentos e emoções antes e durante a direção",
  },
  {
    icon: Heart,
    title: "Reprogramação Emocional",
    description: "Trabalhe a raiz do medo e transforme sua relação com o volante",
  },
  {
    icon: BookOpen,
    title: "Exercícios Guiados",
    description: "Passo a passo para se preparar emocionalmente antes da prática",
  },
  {
    icon: Users,
    title: "Comunidade Exclusiva",
    description: "Troque experiências com outras alunas e receba apoio constante",
  },
];

const stats = [
  { value: "100%", label: "Online e no seu ritmo", icon: Clock },
  { value: "7 dias", label: "Garantia incondicional", icon: Shield },
  { value: "24/7", label: "Acesso vitalício", icon: Infinity },
];

export const Method = () => {
  return (
    <section className="py-20 px-4 bg-gradient-to-b from-white to-teal-light">
      <div className="max-w-6xl mx-auto">
        <div className="text-center mb-4">
          <span className="text-gold text-sm font-medium">O Método</span>
        </div>

        <h2 className="text-3xl md:text-5xl font-bold text-teal text-center mb-8">
          O que é o Método MASD?
        </h2>

        <p className="text-xl text-center text-foreground max-w-4xl mx-auto mb-16">
          Um método psicológico e prático que atua na{" "}
          <span className="font-bold text-teal">raiz emocional do medo</span>, não apenas na
          técnica de direção. É assim que você conquista resultados reais e duradouros.
        </p>

        <div className="grid md:grid-cols-2 gap-8 mb-16">
          {methodFeatures.map((feature, index) => {
            const Icon = feature.icon;
            return (
              <div key={index} className="bg-white p-8 rounded-2xl shadow-lg">
                <div className="w-14 h-14 bg-gold/10 rounded-full flex items-center justify-center mb-6 border-2 border-gold/20">
                  <Icon className="h-7 w-7 text-gold" />
                </div>
                <h3 className="text-xl font-bold text-teal mb-3">{feature.title}</h3>
                <p className="text-muted-foreground">{feature.description}</p>
              </div>
            );
          })}
        </div>

        <div className="bg-teal text-white rounded-2xl p-8 md:p-12 mb-16">
          <h3 className="text-2xl md:text-3xl font-bold mb-4 text-center">
            Não é só sobre aprender a dirigir...
          </h3>
          <p className="text-lg text-center max-w-3xl mx-auto opacity-90">
            É sobre transformar sua relação com o medo, conquistar confiança e liberdade. O Método
            MASD trabalha o lado psicológico que nenhuma autoescola ensina.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {stats.map((stat, index) => {
            const Icon = stat.icon;
            return (
              <div key={index} className="bg-white rounded-2xl p-8 shadow-lg text-center">
                <Icon className="h-12 w-12 text-gold mx-auto mb-4" />
                <div className="text-4xl md:text-5xl font-bold text-teal mb-2">{stat.value}</div>
                <p className="text-muted-foreground text-lg">{stat.label}</p>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

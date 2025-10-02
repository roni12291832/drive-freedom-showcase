import { XCircle, ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";

const painPoints = [
  "Depende do marido, amigos ou Uber para ir a qualquer lugar",
  "Sente vergonha por ter CNH e não dirigir",
  "Ansiedade só de pensar em pegar o volante",
  "Já tentou autoescola ou instrutores e não funcionou",
  "Perdeu oportunidades de trabalho por não dirigir",
  "Sente-se presa e sem liberdade no dia a dia",
];

export const PainPoints = () => {
  return (
    <section className="py-20 px-4 bg-white">
      <div className="max-w-5xl mx-auto">
        <div className="text-center mb-12">
          <span className="text-destructive text-sm font-medium mb-4 block">
            Você se identifica com isso?
          </span>
          <h2 className="text-2xl sm:text-3xl md:text-5xl font-bold text-teal mb-6 px-4">
            O medo de dirigir está limitando sua vida?
          </h2>
        </div>

        <div className="grid md:grid-cols-2 gap-6 mb-12">
          {painPoints.map((point, index) => (
            <div key={index} className="flex items-start gap-4 p-6 bg-secondary rounded-lg border border-border">
              <XCircle className="h-6 w-6 text-destructive flex-shrink-0 mt-1" />
              <p className="text-foreground text-lg">{point}</p>
            </div>
          ))}
        </div>

        <div className="text-center space-y-4 max-w-3xl mx-auto px-4">
          <p className="text-base sm:text-lg md:text-xl text-muted-foreground font-medium">
            Se você sente isso, saiba que não está sozinha.
          </p>
          <p className="text-base sm:text-lg text-muted-foreground">
            Milhares de mulheres já superaram esse medo e conquistaram sua independência.{" "}
            <span className="text-teal font-semibold">Agora é a sua vez.</span>
          </p>
        </div>

        <div className="mt-12 text-center">
          <Button 
            size="lg" 
            className="bg-gold hover:bg-gold/90 text-teal font-bold text-base md:text-lg px-6 md:px-8 py-4 md:py-6 rounded-lg shadow-lg hover:shadow-xl transition-all w-full sm:w-auto"
            asChild
          >
            <a href="https://pay.kiwify.com.br/f1hS5iq" target="_blank" rel="noopener noreferrer">
              Quero superar meu medo agora
              <ArrowRight className="ml-2 h-4 w-4 md:h-5 md:w-5" />
            </a>
          </Button>
        </div>
      </div>
    </section>
  );
};

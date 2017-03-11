import java.util.Random;

class casino {
    public static void main(String[] args) {
        Random numbers = new Random();
        for (int a = 1; a<2; a++){ //ete menq poxenq " a<2 ev 2i poxaren urish tiv dnenq apa patahakan tveri qanak@ kmecana"
            System.out.println(numbers.nextInt(32));
        }
    }
}
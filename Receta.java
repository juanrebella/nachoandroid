package ingredientes;
//Clase Receta

public class Receta {
	//propiedades o variables
	private String flour;
	private String yeast;
	private int tomato;
	private String cheese;
	public String pitas;
	
		public Receta (){
			
		}
	   public Receta(String flour){////////// Constructor
		   this.flour = flour;
	   }	
	   
///////// Métodos o funciones//////////////////////////
		   public String getFlour(){//HARINA
			   return flour;
		   }
		   public void setFlour(String flour){
			   this.flour = flour;
		   }
		//////LEVADURA
				   public String getYeast(){ 
					   return yeast;
				   }
				   public void setYeast(String yeast){
					   this.yeast = yeast;
					  }
				 //Tomates
						   public int getTomato(){
							   return tomato;
						   }
						   public void setTomato(int tomato){
							   this.tomato = tomato;
						   }
						   	/////Queso
								   public String getCheese(){
									   return cheese;
								   }
								   public void setCheese(String cheese){
									   this.cheese= cheese;
								   }
									/////PITAS
								   public String getPitas(){
									   return (pitas+" deliciosas pitas");
								   }
								   public void setPitas(String pitas){
									   this.pitas= pitas;
								   }	   
}//class
	



public class Test {
	public static void main(String[] args){
Person taro=new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="111-1111";
		taro.address="aaa@jp";

		System.out.println(taro.name+","+taro.age+","+taro.phoneNumber+","+taro.address);
		taro.talk();
		taro.walk();
		taro.run();

Person jiro=new Person();
		jiro.name="木村次郎";
		jiro.age=18;
		jiro.phoneNumber="222-2222";
		jiro.address="bbb@jp";

		System.out.println(jiro.name+","+jiro.age+","+jiro.phoneNumber+","+jiro.address);

Person hanako=new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="333-3333";
		hanako.address="ccc@jp";

		System.out.println(hanako.name+","+hanako.age+","+hanako.phoneNumber+","+hanako.address);

Person konatsu=new Person();
		konatsu.name="高野小夏";
		konatsu.age=27;
		konatsu.phoneNumber="444-4444";
		konatsu.address="ddd@jp";

		System.out.println(konatsu.name+","+konatsu.age+","+konatsu.phoneNumber+","+konatsu.address);
	}
}

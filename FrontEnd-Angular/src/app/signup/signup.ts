export class signup {
  constructor(
    public firstname: string,
    public lastname: string,
    public username: string,
    public email: string,
    public phone: number | null,
    public gender_option: string,
    public password: string,
    public conPassword: string
  ) {}
}

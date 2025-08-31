<?php

return [
    // Auth
    'unknownAuthenticator'  => '{0} não é um autenticador válido.',
    'unknownUserProvider'   => 'Não é possível determinar o User Provider a ser usado.',
    'invalidUser'           => 'Não é possível localizar o usuário especificado.',
    'badAttempt'            => 'Não foi possível fazer login. Por favor, verifique suas credenciais.',
    'noPassword'            => 'Não é possível validar um usuário sem uma senha.',
    'invalidPassword'       => 'Não foi possível fazer login. Por favor, verifique sua senha.',
    'noToken'               => 'Cada request deve ter um token no cabeçalho Authorization.',
    'badToken'              => 'O token de acesso não é válido.',
    'oldToken'              => 'O token de acesso expirou.',
    'noUserEntity'          => 'A entidade User deve ser fornecida para validação de senha.',
    'invalidEmail'          => 'Não é possível verificar se o email corresponde ao email no banco de dados.',
    'unableSendEmailToUser' => 'Desculpe, houve um problema ao enviar o email. Não podemos enviar um email para "{0}".',
    'throttled'             => 'Muitas solicitações feitas a partir deste IP. Você pode tentar novamente em {0} segundos.',

    // Email
    'emailSubject'          => 'Seu link de acesso',
    'emailHello'            => 'Olá',
    'emailMessage'          => 'Abaixo está o link de acesso que você solicitou:',
    'emailRegards'          => 'Atenciosamente',

    // Password
    'errorPasswordLength'   => 'As senhas devem ter pelo menos {0, number} caracteres.',
    'suggestPasswordLength' => 'Frases secretas - de até 255 caracteres - tornam as senhas mais seguras e fáceis de lembrar.',
    'errorPasswordCommon'   => 'A senha não deve ser uma senha comum.',
    'suggestPasswordCommon' => 'A senha foi comparada com mais de 65 mil senhas comumente usadas ou que vazaram.',
    'errorPasswordPersonal' => 'As senhas não podem conter informações pessoais.',
    'suggestPasswordPersonal' => 'Variações do seu email ou nome de usuário não devem ser usadas como senhas.',
    'errorPasswordTooLong'  => 'As senhas não podem exceder 255 caracteres.',
    'errorPasswordEmpty'    => 'É necessária uma senha.',
    'passwordChangeSuccess' => 'Senha alterada com sucesso!',
    'userDoesNotExist'      => 'A senha não foi alterada. O usuário não existe.',
    'resetTokenExpired'     => 'O token de redefinição de senha expirou.',

    // Register
    'registerDisabled'      => 'Desculpe, o registro de novas contas não está permitido no momento.',
    'registerSuccess'       => 'Bem-vindo a bordo! Você pode fazer login agora.',

    // Login
    'badAttempt'            => 'Não foi possível fazer login. Por favor, verifique suas credenciais.',
    'loginSuccess'          => 'Login realizado com sucesso!',
    'invalidPassword'       => 'Não foi possível fazer login. Por favor, verifique sua senha.',

    // Forgotten Passwords
    'forgotDisabled'        => 'A opção de redefinir senha foi desativada.',
    'forgotNoUser'          => 'Não foi possível encontrar um usuário com esse email.',
    'forgotSubject'         => 'Instruções de Redefinição de Senha',
    'forgotEmailSent'       => 'Um email com instruções para redefinir sua senha foi enviado para {0}.',
    'forgotSuccess'         => 'Um link para redefinir sua senha foi enviado para seu email.',

    // Magic Link
    'magicLinkDisabled'     => 'Links mágicos não estão disponíveis.',
    'magicLinkSubject'      => 'Seu Link de Acesso',
    'magicLinkSuccess'      => 'Um link de acesso foi enviado para seu email.',
    'magicLinkBody'         => 'Clique no link abaixo para fazer login:',
    'magicLinkExpired'      => 'O link de acesso expirou.',

    // Passwords
    'errorPasswordLength'   => 'As senhas devem ter pelo menos {0} caracteres.',
    'errorPasswordCommon'   => 'A senha não pode ser uma senha comum.',
    'errorPasswordEmpty'    => 'É necessária uma senha.',

    // Groups
    'groupNotFound'         => 'Não foi possível encontrar o grupo: {0}',

    // Permissions
    'permissionNotFound'    => 'Não foi possível encontrar a permissão: {0}',

    // Banned
    'userIsBanned'          => 'Usuário foi banido. Entre em contato com o administrador.',

    // Too many requests
    'tooManyRequests'       => 'Muitas tentativas. Por favor, aguarde {0} segundos.',

    // Login views
    'loginTitle'            => 'Login',
    'loginHeading'          => 'Acessar Sistema',
    'emailAddress'          => 'Email',
    'username'              => 'Usuário',
    'password'              => 'Senha',
    'rememberMe'            => 'Lembrar-me',
    'forgotPassword'        => 'Esqueci minha senha',
    'loginButton'           => 'Entrar',
    'needAccount'           => 'Precisa de uma conta?',
    'registerLink'          => 'Cadastre-se aqui',
    
    // Register views
    'registerTitle'         => 'Cadastro',
    'registerHeading'       => 'Criar Nova Conta',
    'confirmPassword'       => 'Confirmar Senha',
    'registerButton'        => 'Criar Conta',
    'alreadyHaveAccount'    => 'Já tem uma conta?',
    'loginLink'             => 'Faça login aqui',

    // Forgot Password views
    'forgotTitle'           => 'Recuperar Senha',
    'forgotHeading'         => 'Recuperar Senha',
    'forgotInstructions'    => 'Digite seu email abaixo para receber instruções de recuperação.',
    'forgotSubmit'          => 'Enviar Instruções',
    'backToLogin'           => 'Voltar para Login',

    // Reset Password views
    'resetTitle'            => 'Redefinir Senha',
    'resetHeading'          => 'Redefinir Senha',
    'resetNewPassword'      => 'Nova Senha',
    'resetConfirmPassword'  => 'Confirmar Nova Senha',
    'resetSubmit'           => 'Redefinir Senha',

    // Magic Link views
    'magicLinkTitle'        => 'Link de Acesso',
    'magicLinkHeading'      => 'Link de Acesso',
    'magicLinkInstructions' => 'Digite seu email para receber um link de acesso instantâneo.',
    'magicLinkSubmit'       => 'Enviar Link',
];
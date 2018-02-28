<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_87bddd7a4d431aee1694802b458b744ffb38cfccff90f5a4159f10e286e0f9aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df4c7acff42f6007197df47da0d95a38240decc712405cec7022499c12e56aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4c7acff42f6007197df47da0d95a38240decc712405cec7022499c12e56aa8->enter($__internal_df4c7acff42f6007197df47da0d95a38240decc712405cec7022499c12e56aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_be0e99ad034fa4b9540cbf17a0abb74a7d1803bcbfa6a5d420d4cc9777009e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0e99ad034fa4b9540cbf17a0abb74a7d1803bcbfa6a5d420d4cc9777009e5f->enter($__internal_be0e99ad034fa4b9540cbf17a0abb74a7d1803bcbfa6a5d420d4cc9777009e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df4c7acff42f6007197df47da0d95a38240decc712405cec7022499c12e56aa8->leave($__internal_df4c7acff42f6007197df47da0d95a38240decc712405cec7022499c12e56aa8_prof);

        
        $__internal_be0e99ad034fa4b9540cbf17a0abb74a7d1803bcbfa6a5d420d4cc9777009e5f->leave($__internal_be0e99ad034fa4b9540cbf17a0abb74a7d1803bcbfa6a5d420d4cc9777009e5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
